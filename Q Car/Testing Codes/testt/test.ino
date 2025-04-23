int right = 4;
int left = 10;
int Afor = 3;
int BF = 2;  // Motor a pins Right


void setup() {
   Serial.begin (9600);
   pinMode(right,OUTPUT);
   pinMode(left,OUTPUT);
  pinMode(Afor, OUTPUT);
  pinMode(BF, OUTPUT);
}

void loop () {

digitalWrite(left,HIGH);

}
