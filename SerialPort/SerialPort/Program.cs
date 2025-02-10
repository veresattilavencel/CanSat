using System.Diagnostics.CodeAnalysis;
using System.Diagnostics.Metrics;
using System.IO.Ports;
using System.Runtime.Intrinsics.Arm;
using System.Text;
using ClassLibrary;

RestApiController api = new RestApiController();
static double? isValidData(byte? crc8, double? data)
{
    byte[] byteArray = BitConverter.GetBytes(17.92);
    byte crc = CRC8.CalculateCRC8(byteArray);
    if (crc == crc8) return data;
    return null;
}
double? IsDoubleNull(string? data){
    double number;
    if (double.TryParse(data, out number))
    {
        Console.WriteLine(number);
        return number;
    }
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
    string?[] data = SP.ReadLine().Split(",");
    try
    {
        if (data.Length > 2)
        {
            DateTime time = DateTime.Now;
            api.AddNewGPS(new(time, isValidData(byte.Parse(data[1]), IsDoubleNull(data[0].Replace(".", ","))), isValidData(byte.Parse(data[3]), IsDoubleNull(data[2].Replace(".", ","))), isValidData(byte.Parse(data[5]), IsDoubleNull(data[4].Replace(".", ","))), isValidData(byte.Parse(data[7]), IsDoubleNull(data[6].Replace(".", ",")))));
            api.AddNewBS(new(time, isValidData(byte.Parse(data[9]), IsDoubleNull(data[8].Replace(".", ","))), isValidData(byte.Parse(data[11]), IsDoubleNull(data[10].Replace(".", ","))), isValidData(byte.Parse(data[13]), IsDoubleNull(data[12].Replace(".", ",")))));
            api.AddNewLI(new(time, isValidData(byte.Parse(data[15]), IsDoubleNull(data[14].Replace(".", ",")))));
            api.AddNewGyroscope(new(time, isValidData(byte.Parse(data[17]), IsDoubleNull(data[16].Replace(".", ","))), isValidData(byte.Parse(data[19]), IsDoubleNull(data[18].Replace(".", ","))), isValidData(byte.Parse(data[21]), IsDoubleNull(data[20].Replace(".", ",")))));
            api.AddNewSS(new(time, isValidData(byte.Parse(data[23]), IsDoubleNull(data[22].Replace(".", ","))), isValidData(byte.Parse(data[25]), IsDoubleNull(data[24].Replace(".", ","))), isValidData(byte.Parse(data[27]), IsDoubleNull(data[26].Replace(".", ","))), isValidData(byte.Parse(data[29]), IsDoubleNull(data[28].Replace(".", ","))), isValidData(byte.Parse(data[31]), IsDoubleNull(data[30].Replace(".", ","))), isValidData(byte.Parse(data[33]), IsDoubleNull(data[32].Replace(".", ",")))));
        }
    }
    catch {
        StreamWriter w = new("data.csv", true, Encoding.UTF8);
        w.WriteLine(string.Join(';', data));
        w.Close();
    }
}