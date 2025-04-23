int Right = P1; // right
int Left = P0; // Left
int Arev = P3;  // Motor b pins Left                  b
int Afor = P2;                        //               a
int Brev = P10;  // Motor a pins Right                b
int Bfor = P4;                     //               a

void setup()
{
  Serial.begin(9600);
  pinMode(Arev, OUTPUT);
  pinMode(Afor, OUTPUT);
  pinMode(Brev, OUTPUT);
  pinMode(Bfor, OUTPUT);
  pinMode(Right, INPUT);
  pinMode(Left,INPUT);
  
}

void loop() {
    Serial.println(analogRead(Right));
    Serial.println(analogRead(Left));
    
  if ( analogRead(Left)> 2000 &&  analogRead(Right)> 2000 ) {

  digitalWrite(Afor,LOW);
  digitalWrite(Bfor,LOW);
  }
  
  if ( analogRead(Left)< 2000 &&  analogRead(Right)< 2000 ) {

  digitalWrite(Afor,HIGH);
  digitalWrite(Bfor,HIGH);
  }
    
 if ( analogRead(Left)< 2000 &&  analogRead(Right)> 2000 ){
 digitalWrite(Bfor,HIGH);
 digitalWrite(Afor,LOW);
   digitalWrite(Arev,LOW);
  digitalWrite(Brev,LOW);
 delay(250);
 }
  if   (analogRead(Right)< 2000 &&  analogRead(Left)> 2000 ){
 digitalWrite(Bfor,LOW);
 digitalWrite(Afor,HIGH);
   digitalWrite(Arev,LOW);
  digitalWrite(Brev,LOW);
 delay(250);
    }
 delay(100);
}
