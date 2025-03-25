using System.Diagnostics.CodeAnalysis;
using System.Diagnostics.Metrics;
using System.IO.Ports;
using System.Runtime.Intrinsics.Arm;
using System.Text;
using ClassLibrary;

RestApiController api = new ();
static double? isValidData(byte? crc8, double? data)
{
    byte[] byteArray = BitConverter.GetBytes(17.92);
    byte crc = CRC8.CalculateCRC8(byteArray);
    if (crc == crc8) return data;
    return null;
}
SerialPort SP = new()
{
    PortName = "com3",
    BaudRate = 9600,
    ReadTimeout = 600
};
SP.Open();
while (true)
{
    try
    {
        string?[] data = SP.ReadLine().Split(",");
        try
        {
            if (data[0] == "1")
            {
                //PreFlight
                api.AddNewPreFlight(new(DateTime.Parse(data[1]), double.Parse(data[2]), double.Parse(data[3]), double.Parse(data[4]), double.Parse(data[5]), double.Parse(data[6]), double.Parse(data[7]), double.Parse(data[8]), double.Parse(data[9])));
            }
            else if (data[0] == "2")
            {
                //MissionLive
                api.AddNewMissionLive(new(DateTime.Parse(data[1]), double.Parse(data[2]), double.Parse(data[3]), double.Parse(data[4]), double.Parse(data[5]), double.Parse(data[6]), double.Parse(data[7]), double.Parse(data[8]), double.Parse(data[9]), double.Parse(data[10]), double.Parse(data[11]), double.Parse(data[12]), double.Parse(data[13]), double.Parse(data[14]), double.Parse(data[15]), double.Parse(data[16]), double.Parse(data[17]), double.Parse(data[18]), double.Parse(data[19]), double.Parse(data[20]), double.Parse(data[21]), double.Parse(data[22]), double.Parse(data[23]), double.Parse(data[24]), double.Parse(data[25]), double.Parse(data[26])));
            }
            else if (data[0] == "3")
            {
                //PowerSaving
                api.AddNewPowerSaving(new(DateTime.Parse(data[1]), double.Parse(data[2]), double.Parse(data[3]), double.Parse(data[4]), double.Parse(data[5])));

            }
        }
        catch
        {
            StreamWriter w = new("data.csv", true, Encoding.UTF8);
            w.WriteLine(string.Join(';', data));
            w.Close();
        }
    }
    catch
    {
        Console.WriteLine("Nincs adat");
    }
    
}