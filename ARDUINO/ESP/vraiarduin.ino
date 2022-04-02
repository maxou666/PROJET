
#include <WiFi.h>
#include <HTTPClient.h>
#include <ArduinoJson.h>
#include <Arduino.h>
#include <ESP32QRCodeReader.h>
#include <ESP32Servo.h>  // s'il s'agit d'un ESP32, il faut installer une version spéciale
Servo servoN1;
Servo servoN2;
Servo monServomoteur;
Servo servo2;


const char* ssid = "AndroidAPA67D";
const char* password = "hamzacacafdp";

//Your Domain name with URL path or IP address with path
String serverName = "http://192.168.43.46/PROJET/arduino.php";

// the following variables are unsigned longs because the time, measured in
// milliseconds, will quickly become a bigger number than can be stored in an int.
unsigned long lastTime = 0;
// Timer set to 10 minutes (600000)
//unsigned long timerDelay = 600000;
// Set timer to 5 seconds (5000)
unsigned long timerDelay = 5000;
ESP32QRCodeReader reader(CAMERA_MODEL_AI_THINKER);

void onQrCodeTask(void *pvParameters)
{
  struct QRCodeData qrCodeData;

  while (true)
  { delay (800);
    if (reader.receiveQrCode(&qrCodeData, 100))
    {
      Serial.println("Found QRCode");
      if (qrCodeData.valid)
      {
        Serial.print("Payload: ");
        Serial.println((const char *)qrCodeData.payload);
        String a = (String)((const char *)qrCodeData.payload);
        a.remove(0,1);

        Serial.print(a);
        if(WiFi.status()== WL_CONNECTED){
      HTTPClient http;
      String serverPath = serverName + "?qrcode="+a;
      
      // Your Domain name with URL path or IP address with path
      http.begin(serverPath.c_str());
      
      // Send HTTP GET request
      int httpResponseCode = http.GET();
      
      if (httpResponseCode>0) {
        Serial.print("HTTP Response code: ");
        Serial.println(httpResponseCode);
        String payload = http.getString();
        
        
        
        char * tre;
        const char *c = payload.c_str();
        tre= strstr (c,"@");
        Serial.println(payload);
        Serial.println("4");
       
        char json [500];
        payload.replace(" ", "");
        payload.replace("\n","");
        payload.trim();
        payload.remove(0,1);
        payload.toCharArray(json,500);

        StaticJsonDocument<200> doc;
        deserializeJson(doc,json);
        int objet = doc["num"];
          const char * nom = doc["name"];
        Serial.println(String(nom)+String(age));
         if (objet == 1){
          Serial.println("OUVRE 1  ");
          ledcWrite(2,255);
          delay(100);
          ledcWrite(2,0);
         
        }
        if (objet == 2){
          Serial.println("OUVRE 1  ");
          ledcWrite(2,255);
          delay(300);
          ledcWrite(2,0);
          
        }
        if (objet == 3){
          Serial.println("OUVRE 3  ");
          ledcWrite(2,255);
          delay(500);
          ledcWrite(2,0);
        }
        
        if (objet == 4){
          Serial.println("OUVRE 4  ");
          ledcWrite(2,255);
          delay(700);
          ledcWrite(2,0);
        }
        
      }
      else {
        Serial.print("Error code: ");
        Serial.println(httpResponseCode);
      }
       http.end();
      }
      else
      {
        Serial.print("Invalid: ");
        Serial.println((const char *)qrCodeData.payload);
      }
    }
  }
}
}

void setup()
{
  ledcSetup(2,5000,8);
  ledcAttachPin(15,2);
  ledcWrite(2,0);
   pinMode(12, OUTPUT);
      pinMode(13, OUTPUT);
   //pinMode(14, OUTPUT);
   //pinMode(15, OUTPUT);
   digitalWrite(12,LOW);
  digitalWrite(13,LOW);
 // digitalWrite(14,LOW);
 // digitalWrite(15,LOW);

  

  Serial.begin(115200); 

  WiFi.begin(ssid, password);
  Serial.println("Connecting");
  while(WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("Connected to WiFi network with IP Address: ");
  Serial.println(WiFi.localIP());
 
  Serial.println("Timer set to 5 seconds (timerDelay variable), it will take 5 seconds before publishing the first reading.");

 

  reader.setup();

  Serial.println("Setup QRCode Reader");

  reader.beginOnCore(1);

  Serial.println("Begin on Core 1");

  xTaskCreate(onQrCodeTask, "onQrCode", 4 * 1024, NULL, 4, NULL);
}

void loop()
{
  delay(200);
}
