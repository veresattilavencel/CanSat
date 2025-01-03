using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibrary
{
    public record GPS
    {
        public GPS(DateTime time, double? latitude, double? longitude, double? heightAboveSeaLevel, double? speedAboveGround)
        {
            Time = time;
            Latitude = latitude;
            Longitude = longitude;
            HeightAboveSeaLevel = heightAboveSeaLevel;
            SpeedAboveGround = speedAboveGround;
        }

        public DateTime Time { get; init; }
        public double? Latitude { get; init; }
        public double? Longitude { get; init; }
        public double? HeightAboveSeaLevel { get; init; }
        public double? SpeedAboveGround { get; init; }
    }
}
