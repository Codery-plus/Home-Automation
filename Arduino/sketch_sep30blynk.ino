/*************************************************************
  Download latest Blynk library here:
    https://github.com/blynkkk/blynk-library/releases/latest

  Blynk is a platform with iOS and Android apps to control
  Arduino, Raspberry Pi and the likes over the Internet.
  You can easily build graphic interfaces for all your
  projects by simply dragging and dropping widgets.

    Downloads, docs, tutorials: http://www.blynk.cc
    Sketch generator:           http://examples.blynk.cc
    Blynk community:            http://community.blynk.cc
    Follow us:                  http://www.fb.com/blynkapp
                                http://twitter.com/blynk_app

  Blynk library is licensed under MIT license
  This example code is in public domain.

 *************************************************************
  WARNING!
    It's very tricky to get it working. Please read this article:
    http://help.blynk.cc/hardware-and-libraries/arduino/esp8266-with-at-firmware

  You’ll need:
   - Blynk App (download from AppStore or Google Play)
   - Arduino Uno board
   - Decide how to connect to Blynk
     (USB, Ethernet, Wi-Fi, Bluetooth, ...)

  There is a bunch of great example sketches included to show you how to get
  started. Think of them as LEGO bricks  and combine them as you wish.
  For example, take the Ethernet Shield sketch and combine it with the
  Servo example, or choose a USB sketch and add a code from SendData
  example.
 *************************************************************/

/* Comment this out to disable prints and save space */
#define BLYNK_PRINT Serial
//wtf
#include <ESP8266_Lib.h>
#include <BlynkSimpleShieldEsp8266.h>

// You should get Auth Token in the Blynk App.
// Go to the Project Settings (nut icon).
char auth[] = "14d44711dc344804a0e7e7c93c085a1b";

// Your WiFi credentials.
// Set password to "" for open networks.
char ssid[] = "RH5WLAN";
char pass[] = "4201MOJN71290";

// Hardware Serial on Mega, Leonardo, Micro...
//#define EspSerial Serial1



// or Software Serial on Uno, Nano...
#include <SoftwareSerial.h>
SoftwareSerial EspSerial(6, 7); // RX, TX

// Your ESP8266 baud rate:
#define ESP8266_BAUD 9600

ESP8266 wifi(&EspSerial);
int t=1;
//current
const int sensorIn = A0;
int mVperAmp = 185; // use 100 for 20A Module and 66 for 30A Module
 
double Voltage = 0;
double VRMS = 0;
double AmpsRMS = 0;


void setup()
{
  // Debug console
  Serial.begin(9600);



  // Set ESP8266 baud rate
  EspSerial.begin(ESP8266_BAUD);
  delay(10);

 

  Blynk.begin(auth, wifi, ssid, pass);
  // You can also specify server:
  //Blynk.begin(auth, wifi, ssid, pass, "blynk-cloud.com", 80);
  //Blynk.begin(auth, wifi, ssid, pass, IPAddress(192,168,1,100), 8080);


}

BLYNK_WRITE(V0)
{
  int pinValue = param.asInt(); // assigning incoming value from pin V1 to a variable
  Serial.println(pinValue);
  // process received value
  pinMode(13,OUTPUT);
  pinMode(12,OUTPUT);
  
  if(pinValue)
  {
    digitalWrite(13,HIGH);
    digitalWrite(12,HIGH);
  }
  else
  {
    digitalWrite(13,LOW);
    digitalWrite(12,LOW);
    
  }
}


void get_pow()
{
  int sensorData = analogRead(A0); //reading the sensor on A0
  Voltage = getVPP();
   VRMS = (Voltage/2.0) *0.707;  //root 2 is 0.707
   AmpsRMS = (VRMS * 1000)/mVperAmp;
   Serial.print(AmpsRMS);
   Serial.println(" Amps RMS");
  Blynk.virtualWrite(V5, 240*AmpsRMS); //sending to Blynk
}

void loop()
{
  Blynk.run();
  // You can inject your own code or combine it with other sketches.
  // Check other examples on how to communicate with Blynk. Remember
  // to avoid delay() function!
  //Serial.println(digitalRead(13));
  get_pow();  
}

float getVPP()
{
  float result;
  int readValue;             //value read from the sensor
  int maxValue = 0;          // store max value here
  int minValue = 1024;          // store min value here
  
   uint32_t start_time = millis();
   while((millis()-start_time) < 1000) //sample for 1 Sec
   {
       readValue = analogRead(sensorIn);
       // see if you have a new maxValue
       if (readValue > maxValue) 
       {
           /*record the maximum sensor value*/
           maxValue = readValue;
       }
       if (readValue < minValue) 
       {
           /*record the minimum sensor value*/
           minValue = readValue;
       }
   }
   
   // Subtract min from max
   result = ((maxValue - minValue) * 5.0)/1024.0;
      
   return result;
 }
