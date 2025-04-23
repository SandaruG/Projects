#include <NeoPixelBus.h>
 
const uint16_t PixelCount = 25; 
const uint8_t PixelPin = 25;  
 
#define colorSaturation 2
#define LED_POWER      2
 
// three element pixels, in different order and speeds
NeoPixelBus<NeoGrbFeature, Neo800KbpsMethod> strip(PixelCount, PixelPin);
//NeoPixelBus<NeoRgbFeature, Neo400KbpsMethod> strip(PixelCount, PixelPin);
 
 
RgbColor red(colorSaturation, 0, 0);
RgbColor green(0, colorSaturation, 0);
RgbColor blue(0, 0, colorSaturation);
RgbColor white(colorSaturation);
RgbColor black(0);
 
HslColor hslRed(red);
HslColor hslGreen(green);
HslColor hslBlue(blue);
HslColor hslWhite(white);
HslColor hslBlack(black);
 
 
void setup()
{
    Serial.begin(115200);
    while (!Serial); // wait for serial attach
 
    Serial.println();
    Serial.println("Initializing...");
    Serial.flush();
 
    // this resets all the neopixels to an off state
    strip.Begin();
    strip.Show();
 
 
    Serial.println();
    Serial.println("Running...");
    pinMode(LED_POWER, OUTPUT);
    digitalWrite(LED_POWER, HIGH);
}
 
 
void loop()
{
    delay(5000);
 
    Serial.println("Colors R, G, B, W...");
 
    // set the colors, 
    // if they don't match in order, you need to use NeoGrbFeature feature
    strip.SetPixelColor(0, red);
    strip.SetPixelColor(1, green);
    strip.SetPixelColor(2, blue);
    strip.SetPixelColor(3, white);
    // the following line demonstrates rgbw color support
    // if the NeoPixels are rgbw types the following line will compile
    // if the NeoPixels are anything else, the following line will give an error
    //strip.SetPixelColor(3, RgbwColor(colorSaturation));
    strip.Show();
 
 
    delay(5000);
 
    Serial.println("Off ...");
 
    // turn off the pixels
    strip.SetPixelColor(0, black);
    strip.SetPixelColor(1, black);
    strip.SetPixelColor(2, black);
    strip.SetPixelColor(3, black);
    strip.Show();
 
    delay(5000);
 
    Serial.println("HSL Colors R, G, B, W...");
 
    // set the colors, 
    // if they don't match in order, you may need to use NeoGrbFeature feature
    strip.SetPixelColor(0, hslRed);
    strip.SetPixelColor(1, hslGreen);
    strip.SetPixelColor(2, hslBlue);
    strip.SetPixelColor(3, hslWhite);
    strip.Show();
 
 
    delay(5000);
 
    Serial.println("Off again...");
 
    // turn off the pixels
    strip.SetPixelColor(0, hslBlack);
    strip.SetPixelColor(1, hslBlack);
    strip.SetPixelColor(2, hslBlack);
    strip.SetPixelColor(3, hslBlack);
    strip.Show();
 
}
