using System.Diagnostics.Metrics;
using System.IO.Ports;
using System.Runtime.Intrinsics.Arm;
using System.Text;
using ClassLibrary;

byte[] byteArray = BitConverter.GetBytes(17.92);
foreach (byte b in byteArray)
{
    Console.WriteLine(b);
}
byte crc = CRC8.CalculateCRC8(byteArray);
Console.WriteLine($"Calculated CRC-8: 0x{crc:X2}");

SerialPort SP = new();
SP.PortName = "com3";
SP.BaudRate = 9600;
SP.ReadTimeout = 600;
SP.Open();
StreamWriter w = new("measurement.csv", false, Encoding.UTF8);
while (true)
{
    w.WriteLine(SP.ReadLine());
}