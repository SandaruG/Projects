int AF = P10;  // Motor b pins 
int AR = P3;
int BF = P2;  // Motor a pins
int Br = P4;
int RECV_PIN = P15;
IRrecv irrecv(RECV_PIN);
decode_results results;

void setup()
{
  Serial.begin(9600);
  irrecv.enableIRIn(); // Start the receiver

  pwm.begin();
  pwm.setPWMFreq(1000);  // Set to whatever you like, we don't use it in this demo!

  // if you want to really speed stuff up, you can go into 'fast 400khz I2C' mode
  // some i2c devices dont like this so much so if you're sharing the bus, watch
  // out for this!
  Wire.setClock(400000);
}

void stop()
{
 digitalWrite(AF,LOW);
 digitalWrite(BF,LOW);
}
void foward()
{
 digitalWrite(AF,HIGH);
 digitalWrite(BF,HIGH);
}
void back()
{
 digitalWrite(AF,LOW);
 digitalWrite(BF,LOW);
 digitalWrite(AR,HIGH);
 digitalWrite(Br,HIGH);
}
void left()
{
  pwm.setPWM(0, 4096, 0);       // turns pin fully on
  pwm.setPWM(1, 0, 4096);       // turns pin fully off
  pwm.setPWM(2, 4096, 0);       // turns pin fully on
  pwm.setPWM(3, 0, 4096);       // turns pin fully off
}
void right()
{
  pwm.setPWM(0, 0, 4096);       // turns pin fully off
  pwm.setPWM(1, 4096, 0);       // turns pin fully on
  pwm.setPWM(2, 0, 4096);       // turns pin fully on
  pwm.setPWM(3, 4096, 0);       // turns pin fully off
}

void loop() {
  if (irrecv.decode(&results)) {
    Serial.println(results.value, HEX);
    if (results.value == 0xFF18E7) // Receive the value
    {
       foward();
    } else if (results.value == 0xFF4AB5) //You can change the value here according to your IR Remote Controller
    {
       back();
    }
    else if (results.value == 0xFF10EF) //You can change the value here according to your IR Remote Controller
    {
       left();
    }
    else if (results.value == 0xFF5AA5) 
    {
       right();
    }else if (results.value == 0xFF38C7)
    {
       stop();
    }
    irrecv.resume(); // Receive the next value
  }
  delay(100);
}
