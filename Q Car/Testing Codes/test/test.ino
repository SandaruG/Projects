int Arev = P10;  // Motor b pins Left
int Afor = P3;
int BF = P2;  // Motor a pins Right
int Bfor = P4;

void setup()
{
  Serial.begin(9600);
  pinMode(Arev, OUTPUT);
  pinMode(Afor, OUTPUT);
  pinMode(BF, OUTPUT);
  pinMode(Bfor, OUTPUT);
}

void loop() {
 
  digitalWrite(Afor,HIGH);
  digitalWrite(Bfor,HIGH);
  delay(1000);
 digitalWrite(Afor,LOW);
 digitalWrite(Bfor,LOW);
 delay(1000);

      
}
