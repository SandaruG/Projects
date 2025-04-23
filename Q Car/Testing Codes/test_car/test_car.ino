int Right = P6; //Right
int middle = P7; // middle
int Left = P8; // Left
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
  pinMode(Right,INPUT);
  pinMode(middle, INPUT);
  pinMode(Left,INPUT);
}

void loop() {
    Serial.println(digitalRead (Right));
    Serial.println(digitalRead (middle));
    Serial.println(digitalRead (Left));
 delay(100);
 
 if (digitalRead(middle) > 0); {
  digitalWrite(Afor,HIGH);
  digitalWrite(Bfor,HIGH);
  }
  if (digitalRead(middle) < 1 ) {
 digitalWrite(Afor,LOW);
 digitalWrite(Bfor,LOW);
  }
  if ( (digitalRead(middle) <  0 &&  digitalRead(Left) > 0 )){
    
 digitalWrite(Bfor,LOW);
 digitalWrite(Afor,HIGH);
 delay(340);

    }
    if ( digitalRead(middle)< 1 &&  digitalRead(Right) > 0 ){
      
 digitalWrite(Bfor,HIGH);
 digitalWrite(Afor,LOW);
 delay(340);
    }
     // if ( digitalRead(middle)> 0 &&  digitalRead(Left)< 1 && digitalRead(Right)> 0){
    // }
    //  if ( digitalRead(middle)< 1 &&  digitalRead(Right)< 1 && digitalRead(Left)> 0){
   // }
}
