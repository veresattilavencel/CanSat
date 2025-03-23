using Microsoft.VisualBasic.FileIO;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http.Json;
using System.Text;
using System.Text.Json;
using System.Threading.Tasks;

namespace ClassLibrary
{
    public class RestApiController
    {
        HttpClient _httpClient;
        public RestApiController(string url = "http://backend.vm1.test")
        {
            _httpClient = new HttpClient() { BaseAddress = new Uri(url) };
        }
        public int AddNewMissionLive(MissionLive missionLive)
        {
            var content = new StringContent(JsonSerializer.Serialize(missionLive), Encoding.UTF8, "application/json");
            _httpClient.PostAsync("api/missionlives", content).Wait();
            return 0;
        }
        public int AddNewPowerSaving(PowerSaving powerSaving)
        {
            var content = new StringContent(JsonSerializer.Serialize(powerSaving), Encoding.UTF8, "application/json");
            _httpClient.PostAsync("api/powersavings", content).Wait();
            return 0;
        }
        public int AddNewPreFlight(PreFlight preFlight)
        {
            var content = new StringContent(JsonSerializer.Serialize(preFlight), Encoding.UTF8, "application/json");
            _httpClient.PostAsync("api/preflights", content).Wait();
            return 0;
        }
    }
}
