const int sensorPin = A0; //A0 //A1
int mVperAmp = 66; // use 100 for 20A Module and 66 for 30A Module


double SensorVoltage = 0;
double SensorVRMS = 0;
double AmpsRMS = 0;
float EPrice = 0;
float KWH = 0;
double ElectricityVoltage = 220;
float minRMS = 0.707;
float powerfactor = 0.9;
uint32_t lastTime=0;

void setup(){ 
 Serial.begin(9600);
}

void loop(){
 lastTime=millis();
 SensorVoltage = getSensorVoltageInput();
 Serial.print("|");
 Serial.print(SensorVoltage);
 Serial.print(" V |");
 SensorVRMS = (SensorVoltage/2.0) *minRMS; 
 AmpsRMS = (SensorVRMS * 1000)/mVperAmp - 2; //-(3.11); //4.12 if no one load drawback in relay 4
 Serial.print(AmpsRMS);
 Serial.print(" RMS |");
 //Serial.print(" RMS Current ");
 //Serial.print("Energy ");
 KWH= ((KWH+((AmpsRMS*ElectricityVoltage*powerfactor/3600)/1000*(millis()-lastTime)))); // Standard 220V RMS and Powerfactor 0.9
 //KWH= (KWH+(AmpsRMS*ElectricityVoltage*powerfactor)/3600)*(millis()-lastTime); // Standard 220V RMS and Powerfactor 0.9
 //Serial.print(millis());
 //Serial.print(" : ");
 Serial.print("Kwh: ");
 Serial.print( KWH, 6);
 Serial.print("|");
 Serial.print(" ₱ ");
 //Serial.print("Php ");
 EPrice = (KWH * 0.0633)/1000;
 Serial.print(EPrice, 6);
 Serial.println("|");
 }

float getSensorVoltageInput()
{
  float result;
  
  int readValue; 
  int maxValue = 0;          // store max value here
  int minValue = 1024;          // store min value here
  
   uint32_t start_time = millis();
   while((millis()-start_time) < 1000) //sample for 1 Sec
   {
       readValue = analogRead(sensorPin);
       // see if you have a new maxValue
       if (readValue > maxValue) 
       {
           /*record the maximum sensor value*/
           maxValue = readValue;
       }
       if (readValue < minValue) 
       {
           /*record the maximum sensor value*/
           minValue = readValue;
       }
   }
   
   // Subtract min from max
   result = ((maxValue - minValue) * 5.0)/1024.0;
      
   return result;
 }



//2.38 min relay 4
//0.43 avg when load off switch relay 4 led bulb
//0.64 avg when load on switch relay 4 led bulb
//0.67 avg when load on switch relay 3 led bulb
//0.67 avg when load on switch relay 2  led bulb
//0.67 avg when load on switch relay 1  led bulb
//0.80 to .90 when load on switch relay 1 and 2 bulb and fan




