/*
  Basic ESP8266 MQTT example

  This sketch demonstrates the capabilities of the pubsub library in combination
  with the ESP8266 board/library.

  It connects to an MQTT server then:
  - publishes "hello world" to the topic "outTopic" every two seconds
  - subscribes to the topic "inTopic", printing out any messages
    it receives. NB - it assumes the received payloads are strings not binary
  - If the first character of the topic "inTopic" is an 1, switch ON the ESP Led,
    else switch it off

  It will reconnect to the server if the connection is lost using a blocking
  reconnect function. See the 'mqtt_reconnect_nonblocking' example for how to
  achieve the same result without blocking the main loop.

  To install the ESP8266 board, (using Arduino 1.6.4+):
  - Add the following 3rd party board manager under "File -> Preferences -> Additional Boards Manager URLs":
       http://arduino.esp8266.com/stable/package_esp8266com_index.json
  - Open the "Tools -> Board -> Board Manager" and click install for the ESP8266"
  - Select your ESP8266 in "Tools -> Board"

*/

#include <ESP8266WiFi.h>
#include <PubSubClient.h>
#include <math.h>

// Update these with values suitable for your network.

const char* ssid = "P";
const char* password = "trouble3343";
const char* mqtt_server = "broker.mqttdashboard.com";

WiFiClient espClient;
PubSubClient client(espClient);
char msg[50];


void setup_wifi() {

  delay(10);
  // We start by connecting to a WiFi network
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);

  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  randomSeed(micros());

  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
}

void callback(char* topic, byte* payload, unsigned int length) {
  payload[length] = '\0';
  String topic_str = topic, payload_str = (char*)payload;
  Serial.println("[" + topic_str + "]: " + payload_str);

  if (topic_str.equals("onoff-s"))
  {
    if (payload_str.equals("True"))
    {
      Serial.println("open");
      
    }
    else if (payload_str.equals("False"))
    {
      Serial.println("off");
      
    }
}}
//void callback(char* topic, byte* payload, unsigned int length) {
//  Serial.print("Message arrived [");
//  Serial.print(topic);
//  Serial.print("] ");
//  for (int i = 0; i < length; i++) {
//    Serial.print((char)payload[i]);
//  }
//  Serial.println();
//
//
//}

void reconnect() {
  // Loop until we're reconnected
  while (!client.connected()) {
    Serial.print("Attempting MQTT connection...");
    // Create a random client ID
    String clientId = "clientId-pspapleng";
    clientId += String(random(0xffff), HEX);
    // Attempt to connect
    if (client.connect(clientId.c_str())) {
      Serial.println("connected");
      // Once connected, publish an announcement...
      client.publish("onoff-s", "False");
      // ... and resubscribe
      client.subscribe("onoff-s");
    } else {
      Serial.print("failed, rc=");
      Serial.print(client.state());
      Serial.println(" try again in 5 seconds");
      // Wait 5 seconds before retrying
      delay(5000);
    }
  }
}

void setup() {
  Serial.begin(115200);
  setup_wifi();
  client.setServer(mqtt_server, 1883);
  client.setCallback(callback);
  pinMode(D0,INPUT_PULLUP);
}

void loop() {
  if (!client.connected()) {
    reconnect();
  }
  int value;
  value = digitalRead(D0);
  if (value == 1) {
    client.publish("onoff-s", "False");
    Serial.println("off");
  }
  else {
    client.publish("onoff-s", "True");
    Serial.println("on");
  }
  delay(1000);
 
//  double Vout, Rth, temperature, adc_value, result; 
//  adc_value = analogRead(A0);
//  Vout = (adc_value * 3.3)/1023;
//  Rth = (18000 * (3.3 - Vout)) / Vout;
//  temperature = 4050/log(Rth/(18000*pow(2.71828182846,(-4050/298.15))));
//  result = temperature - 273.15 - 14;
//  snprintf(msg, 50, "%.2f", result);
//  client.publish("lab", msg);
//  delay(1000);
//  client.loop();
}
