using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibrary
{
    public record MissionLive
    {
        public MissionLive(DateTime time, double x_Coordinates, double y_Coordinates, double pm1_concentration, double pm2_5_concentration, double pm4_concentration, double pm10_concentration, double nc0_5, double nc1_0, double nc2_5, double nc4_0, double nc10_0, double typycalParticleSize, double accelX, double accelY, double accelZ, double magnetometerX, double magnetometerY, double magnetometerZ, double upperTEMTValue, double bottomTEMTValue, double temperature, double pressure, double networkData1, double networkData2, double altitude)
        {
            Time = time;
            this.x_Coordinates = x_Coordinates;
            this.y_Coordinates = y_Coordinates;
            this.pm1_concentration = pm1_concentration;
            this.pm2_5_concentration = pm2_5_concentration;
            this.pm4_concentration = pm4_concentration;
            this.pm10_concentration = pm10_concentration;
            this.nc0_5 = nc0_5;
            this.nc1_0 = nc1_0;
            this.nc2_5 = nc2_5;
            this.nc4_0 = nc4_0;
            this.nc10_0 = nc10_0;
            this.typycalParticleSize = typycalParticleSize;
            this.accelX = accelX;
            this.accelY = accelY;
            this.accelZ = accelZ;
            this.magnetometerX = magnetometerX;
            this.magnetometerY = magnetometerY;
            this.magnetometerZ = magnetometerZ;
            this.upperTEMTValue = upperTEMTValue;
            this.bottomTEMTValue = bottomTEMTValue;
            this.temperature = temperature;
            this.pressure = pressure;
            this.networkData1 = networkData1;
            this.networkData2 = networkData2;
            this.altitude = altitude;
        }

        public DateTime Time { get; init; }
        public double x_Coordinates { get; init; }
        public double y_Coordinates { get; init; }
        public double pm1_concentration { get; init; }
        public double pm2_5_concentration { get; init; }
        public double pm4_concentration { get; init; }
        public double pm10_concentration { get; init; }
        public double nc0_5 { get; init; }
        public double nc1_0 { get; init; }
        public double nc2_5 { get; init; }
        public double nc4_0 { get; init; }
        public double nc10_0 { get; init; }
        public double typycalParticleSize { get; init; }
        public double accelX { get; init; }
        public double accelY { get; init; }
        public double accelZ { get; init; }
        public double magnetometerX { get; init; }
        public double magnetometerY { get; init; }
        public double magnetometerZ { get; init; }
        public double upperTEMTValue { get; init; }
        public double bottomTEMTValue { get; init; }
        public double temperature { get; init; }
        public double pressure { get; init; }
        public double altitude { get; init; }
        public double networkData1 { get; init; }
        public double networkData2 { get; init; }

    }
}
