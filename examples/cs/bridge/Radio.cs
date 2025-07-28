public class Radio : IDevice
{
    public void TurnOn()=>System.Console.WriteLine("Radio turned on");
    public void TurnOff()=>System.Console.WriteLine("Radio turned off");
    public void SetVolume(int level)=>System.Console.WriteLine($"Radio volume set to {level}");
}