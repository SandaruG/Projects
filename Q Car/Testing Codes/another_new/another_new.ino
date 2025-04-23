int Afor = P3;
int Arev = P10;
int Bfor = P2;
int Brev = P4;
void setup()
{
  Serial.begin(9600);
  pinMode(Afor, OUTPUT);
  pinMode(Bfor, OUTPUT);
  pinMode(Arev, OUTPUT); 
  pinMode(Brev, OUTPUT);
}

void loop() {
  
  digitalWrite(Bfor,HIGH);
 digitalWrite(Afor,HIGH);
  delay(1000);
   digitalWrite(Bfor,LOW);
 digitalWrite(Afor,LOW); 
   delay(1000);

};
