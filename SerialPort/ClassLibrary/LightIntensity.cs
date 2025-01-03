using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibrary
{
    public record LightIntensity
    {
        public LightIntensity(DateTime time, double? lux)
        {
            Time = time;
            Lux = lux;
        }

        public DateTime Time { get; init; }
        public double? Lux { get; init; }

    }
}
