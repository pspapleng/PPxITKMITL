#include <ESP8266WiFi.h>
#include <FirebaseArduino.h>
#include <math.h>
#define WIFI_SSID "P"
#define WIFI_PASSWORD "trouble3343"
#define FIREBASE_HOST "cp62-1dfbb.firebaseio.com"
#define FIREBASE_AUTH "YcXsXNay7y5jPyOojx5iW2slGPeiwdCl7mdLXKSW"
void setup() {
Serial.begin(115200);
WiFi.begin(WIFI_SSID, WIFI_PASSWORD);
Serial.print("connecting");
while (WiFi.status() != WL_CONNECTED) {
Serial.print(".");
delay(500);}
Serial.println();
Serial.print("connected: ");
Serial.println(WiFi.localIP());
Firebase.begin(FIREBASE_HOST, FIREBASE_AUTH);
Firebase.pushInt("analog", 0);
}
void loop() {
  double Vout, Rth, temperature, adc_value, result; 
  adc_value = analogRead(A0);
  Vout = (adc_value * 3.3)/1023;
  Rth = (18000 * (3.3 - Vout)) / Vout;
  temperature = 4050/log(Rth/(18000*pow(2.71828182846,(-4050/298.15))));
  result = temperature - 273.15 - 14;
  Firebase.pushInt("analog", result);
delay(1000);
}
