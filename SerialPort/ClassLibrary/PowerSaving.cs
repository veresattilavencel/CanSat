using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibrary
{
    public record PowerSaving
    {
        public PowerSaving(DateTime time, double x_Coordinates, double y_Coordinates, double networkData1, double networkData2)
        {
            Time = time;
            this.x_Coordinates = x_Coordinates;
            this.y_Coordinates = y_Coordinates;
            this.networkData1 = networkData1;
            this.networkData2 = networkData2;
        }

        public DateTime Time { get; init; }
        public double x_Coordinates { get; init; }
        public double y_Coordinates { get; init; }
        public double networkData1 { get; init; }
        public double networkData2 { get; init; }
    }
}
