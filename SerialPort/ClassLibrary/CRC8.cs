namespace ClassLibrary
{
    public class CRC8
    {
        private const byte Polynomial = 0x07;
        private static readonly byte[] CrcTable;
        static CRC8()
        {
            CrcTable = new byte[256];
            for (int i = 0; i < 256; i++)
            {
                byte current = (byte)i;
                for (int j = 0; j < 8; j++)
                {
                    if ((current & 0x80) != 0)
                    {
                        current = (byte)((current << 1) ^ Polynomial);
                    }
                    else
                    {
                        current <<= 1;
                    }
                }
                CrcTable[i] = current;
            }
        }
        public static byte CalculateCRC8(byte[] data)
        {
            byte crc = 0x00;
            foreach (byte b in data)
            {
                crc = CrcTable[crc ^ b];
            }
            return crc;
        }
    }
}
