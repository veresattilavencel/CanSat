using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibrary
{
    public record BarometicSensor
    {
        public BarometicSensor(DateTime time, double? pressure, double? temperature, double? altitude)
        {
            Time = time;
            Pressure = pressure;
            Temperature = temperature;
            Altitude = altitude;
        }

        public DateTime Time { get; init; }
        public double? Pressure { get; init; }
        public double? Temperature { get; init; }
        public double? Altitude { get; init; }

    }
}
