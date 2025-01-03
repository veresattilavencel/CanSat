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
        public int AddNewBS(BarometicSensor bs)
        {
            var content = new StringContent(JsonSerializer.Serialize(bs), Encoding.UTF8, "application/json");
            _httpClient.PostAsync("api/barometicsensor", content).Wait();
            return 0;
        }
        public int AddNewGPS(GPS gps)
        {
            var content = new StringContent(JsonSerializer.Serialize(gps), Encoding.UTF8, "application/json");
            _httpClient.PostAsync("api/gps", content).Wait();
            return 0;
        }
        public int AddNewGyroscope(Gyroscope gyroscope)
        {
            var content = new StringContent(JsonSerializer.Serialize(gyroscope), Encoding.UTF8, "application/json");
            _httpClient.PostAsync("api/gyroscope", content).Wait();
            return 0;
        }
        public int AddNewLI(LightIntensity li)
        {
            var content = new StringContent(JsonSerializer.Serialize(li), Encoding.UTF8, "application/json");
            _httpClient.PostAsync("api/lightintensity", content).Wait();
            return 0;
        }
        public int AddNewSS(SensirionSps30 ss)
        {
            var content = new StringContent(JsonSerializer.Serialize(ss), Encoding.UTF8, "application/json");
            _httpClient.PostAsync("api/sensirionsps30", content).Wait();
            return 0;
        }
    }
}
