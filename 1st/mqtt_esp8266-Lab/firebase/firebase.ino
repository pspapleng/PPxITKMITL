//#include <ESP8266WiFi.h>
//#include <FirebaseArduino.h>
//#define WIFI_SSID "P"
//#define WIFI_PASSWORD "trouble3343"
//#define FIREBASE_HOST "cp62-1dfbb.firebaseio.com"
//#define FIREBASE_AUTH "YcXsXNay7y5jPyOojx5iW2slGPeiwdCl7mdLXKSW"
//
//void setup() {
//Serial.begin(115200);
//WiFi.begin(WIFI_SSID, WIFI_PASSWORD);
//Serial.print("connecting");
//while (WiFi.status() != WL_CONNECTED) {
//Serial.print(".");
//delay(500);}
//Serial.println();
//Serial.print("connected: ");
//Serial.println(WiFi.localIP());
//Firebase.begin(FIREBASE_HOST, FIREBASE_AUTH);
//Firebase.setInt("analog", 0);
//}
//
//void loop() {
//int val = analogRead(A0);
//Serial.println(val);
//Firebase.setInt("analog", val);
//delay(500);
//}


#include <ESP8266WiFi.h>
#include <FirebaseArduino.h>
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
pinMode(D1, OUTPUT);
Firebase.begin(FIREBASE_HOST, FIREBASE_AUTH);

}
void loop() {
analogWrite(D1, Firebase.getInt("analog"));
delay(500);
}
