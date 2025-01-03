using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibrary
{
    public record Gyroscope
    {
        public Gyroscope(DateTime time, double? x_rotation, double? y_rotation, double? z_rotation)
        {
            Time = time;
            this.x_rotation = x_rotation;
            this.y_rotation = y_rotation;
            this.z_rotation = z_rotation;
        }

        public DateTime Time { get; init; }
        public double? x_rotation { get; init; }
        public double? y_rotation { get; init; }
        public double? z_rotation { get; init; }

    }
}
