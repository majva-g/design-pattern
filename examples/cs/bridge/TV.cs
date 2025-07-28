public class TV : IDevice
{
    public void TurnOn()=>System.Console.WriteLine("TV turned on");
    public void TurnOff()=>System.Console.WriteLine("TV turned off");
    public void SetVolume(int level)=>System.Console.WriteLine($"TV volume  set to {level}");
}