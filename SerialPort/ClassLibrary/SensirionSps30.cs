using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibrary
{
    public class SensirionSps30
    {
        public SensirionSps30(DateTime time, double? pm1_concentration, double? pm2_5_concentration, double? pm10_concentration, double? temperature, double? humidity, double? flow_rate)
        {
            Time = time;
            this.pm1_concentration = pm1_concentration;
            this.pm2_5_concentration = pm2_5_concentration;
            this.pm10_concentration = pm10_concentration;
            this.temperature = temperature;
            this.humidity = humidity;
            this.flow_rate = flow_rate;
        }

        public DateTime Time { get; init; }
        public double? pm1_concentration { get; init; }
        public double? pm2_5_concentration { get; init; }
        public double? pm10_concentration { get; init; }
        public double? temperature { get; init; }
        public double? humidity { get; init; }
        public double? flow_rate { get; init; }

    }
}
