int Right = P1; // right
int middle = P7; // middle
int Left = P0; // left
int Arev = P4;  // Motor b pins Left
int Afor = P10; 
int Brev = P2;  // Motor a pins Right
int Bfor = P3;

void setup()
{
  Serial.begin(9600);
  pinMode(Arev, OUTPUT);
  pinMode(Afor, OUTPUT);
  pinMode(Brev, OUTPUT);
  pinMode(Bfor, OUTPUT);
  pinMode(Right, INPUT);
  pinMode(middle, INPUT);
  pinMode(Left,INPUT);
  

}

void loop() {
    Serial.println(analogRead(Right));
    Serial.println(analogRead(middle));
    Serial.println(analogRead(Left));
    
  if (analogRead(middle)> 2000 ) {

  digitalWrite(Afor,HIGH);
  digitalWrite(Bfor,HIGH);
  }
  if (analogRead(middle)< 2000 ) {
 digitalWrite(Afor,LOW);
 digitalWrite(Bfor,LOW);
   digitalWrite(Arev,LOW);
  digitalWrite(Brev,LOW);
    }
 if ( analogRead(middle)< 2000 &&  analogRead(Right)> 2000 ){
 digitalWrite(Bfor,HIGH);
 digitalWrite(Afor,LOW);
   digitalWrite(Arev,LOW);
  digitalWrite(Brev,LOW);
 delay(250);
     }
   if ( (analogRead(middle)< 2000 &&  analogRead(Left)> 2000 )){
 digitalWrite(Bfor,LOW);
 digitalWrite(Afor,HIGH);
   digitalWrite(Arev,LOW);
  digitalWrite(Brev,LOW);
 delay(250);
    }
 delay(100);
}
