// Line Follower Robot

int M_A1 = 3; //motor a = +
int M_A2 = 4; //motor a = -
int M_B1 = 8; //motor b = -
int M_B2 = 9; //motor b = +
int R_S = 5; //sincer R
int S_S =  1; //sincer S
int L_S =  11; //sincer L

void setup()
{
pinMode(M_B1, OUTPUT);
pinMode(M_B2, OUTPUT);
pinMode(M_A1, OUTPUT);
pinMode(M_A2, OUTPUT);
pinMode(L_S, INPUT);
pinMode(S_S, INPUT);
pinMode(R_S, INPUT);
delay(200);
}
void loop()
{  
if ((digitalRead(L_S) == 0)&&(digitalRead(S_S) ==1)&&(digitalRead(R_S) == 0)){forword();}
if ((digitalRead(L_S) == 1)&&(digitalRead(S_S) == 1)&&(digitalRead(R_S) == 0)){SturnLeft();}
if ((digitalRead(L_S) == 1)&&(digitalRead(S_S) ==0)&&(digitalRead(R_S) == 0)) {turnLeft();}
if ((digitalRead(L_S) ==0)&&(digitalRead(S_S) == 1)&&(digitalRead(R_S) == 1)){SturnRight();}
if ((digitalRead(L_S) == 0)&&(digitalRead(S_S) == 0)&&(digitalRead(R_S) == 1)){turnRight();}
if ((digitalRead(L_S) == 1)&&(digitalRead(S_S) == 1)&&(digitalRead(R_S) == 1)){Stop();}
}
void forword(){
digitalWrite(M_A1, HIGH);
digitalWrite(M_A2, LOW);
digitalWrite(M_B1, HIGH);
digitalWrite(M_B2, LOW);  
}
void SturnRight(){
digitalWrite(M_A1, LOW);
digitalWrite(M_A2, HIGH);
digitalWrite(M_B1, HIGH);
digitalWrite(M_B2, LOW);  
}
void turnRight(){
digitalWrite(M_A1, LOW);
digitalWrite(M_A2, LOW);
digitalWrite(M_B1, HIGH);
digitalWrite(M_B2, LOW);  
}
void SturnLeft(){
digitalWrite(M_A1, HIGH);
digitalWrite(M_A2, LOW);
digitalWrite(M_B1, LOW);
digitalWrite(M_B2, HIGH);
}
void turnLeft(){
digitalWrite(M_A1, HIGH);
digitalWrite(M_A2, LOW);
digitalWrite(M_B1, LOW);
digitalWrite(M_B2, LOW);
}
void Stop(){
digitalWrite(M_A1, LOW);
digitalWrite(M_A2, LOW);
digitalWrite(M_B1, LOW);
digitalWrite(M_B2, LOW);
}
