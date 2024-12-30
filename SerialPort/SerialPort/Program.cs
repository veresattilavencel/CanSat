using System.Diagnostics.Metrics;
using System.IO.Ports;
using System.Text;

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
