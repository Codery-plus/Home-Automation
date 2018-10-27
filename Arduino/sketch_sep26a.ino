#include "SoftwareSerial.h"
String ssid ="RH5WLAN";

String password="4201MOJN71290";

SoftwareSerial esp(6, 7);// RX, TX

String data;

String server = "192.168.0.114"; // www.example.com

String uri = "/rec.php";// our example is /esppost.php
/*
int DHpin = 8;//sensor pin

byte dat [5];

String temp ,hum;
*/

String temp;

void setup() {

temp = String("off");
//pinMode (DHpin, OUTPUT);

esp.begin(9600);

Serial.begin(9600);

reset();

connectWifi();

}

//reset the esp8266 module

void reset() {

esp.println("AT+RST");

//Serial.println(esp.read());

delay(2000);

Serial.print("It reached here 1\n");

if(esp.find("OK") ) Serial.println("Module Reset");

}

//connect to your wifi network

void connectWifi() {

Serial.println("Connecting to Wi-Fi...");
//Serial.println("SSID="+String(ssid));

String cmd = "AT+CWJAP=\"" +ssid+"\",\"" + password + "\"";

Serial.println(cmd);

esp.println(cmd);

delay(8000);

if(esp.find("OK")) {

Serial.println("Connected!");

}

else {

connectWifi();

Serial.println("Cannot connect to wifi"); }

}

/*byte read_data () {

byte data;

for (int i = 0; i < 8; i ++) {

if (digitalRead (DHpin) == LOW) {

while (digitalRead (DHpin) == LOW); // wait for 50us

delayMicroseconds (30); // determine the duration of the high level to determine the data is '0 'or '1'

if (digitalRead (DHpin) == HIGH)

data |= (1 << (7-i)); // high front and low in the post

while (digitalRead (DHpin) == HIGH);

// data '1 ', wait for the next one receiver

}

} return data; }*/

/*void start_test () {

digitalWrite (DHpin, LOW); // bus down, send start signal

delay (30); // delay greater than 18ms, so DHT11 start signal can be detected

digitalWrite (DHpin, HIGH);

delayMicroseconds (40); // Wait for DHT11 response

pinMode (DHpin, INPUT);

while (digitalRead (DHpin) == HIGH);

delayMicroseconds (80);

// DHT11 response, pulled the bus 80us

if (digitalRead (DHpin) == LOW);

delayMicroseconds (80);

// DHT11 80us after the bus pulled to start sending data

for (int i = 0; i < 4; i ++)

// receive temperature and humidity data, the parity bit is not considered

dat[i] = read_data ();

pinMode (DHpin, OUTPUT);

digitalWrite (DHpin, HIGH);

// send data once after releasing the bus, wait for the host to open the next Start signal

}*/

void loop () {

//start_test ();

// convert the bit data to string form

//hum = String("0");


if(temp=="off")
  {temp=String("on");}

else
  {temp=String("off");}

data = String("id=0") + String("&status=")+String(temp);// data sent must be under this form //name1=value1&name2=value2.

httppost();

delay(1000);

}

void httppost () {

Serial.println("Entered httppost()");

String some = String("AT+CIPSTART=\"TCP\",\"" + server + "\",80");

Serial.println(some);
esp.println(some);//start a TCP connection.


delay(2000);
//Serial.println(esp.read());

if( esp.find("OK") or esp.find("ALREAY CONNECT")) {

Serial.println("TCP connection ready");

} delay(1000);

String postRequest =

"POST " + uri + " HTTP/1.0\r\n" +

"Host: " + server + "\r\n" +

"Accept: *" + "/" + "*\r\n" +

"Content-Length: " + data.length() + "\r\n" +

"Content-Type: application/x-www-form-urlencoded\r\n" +

"\r\n" + data;

String sendCmd = "AT+CIPSEND=";//determine the number of caracters to be sent.

esp.print(sendCmd);

esp.println(postRequest.length() );

delay(500);

if(esp.find(">")) { Serial.println("Sending.."); esp.print(postRequest);

if( esp.find("SEND OK")) { Serial.println("Packet sent");

while (esp.available()) {

String tmpResp = esp.readString();

Serial.println(tmpResp);

}

// close the connection

esp.println("AT+CIPCLOSE");

}

}}
