public class AdvancedRemoteControl : RemoteControl
{
    public AdvancedRemoteControl(IDevice device) : base(device) { }

    public void Mute()
    {
        System.Console.WriteLine("Muting ...");
        _device.SetVolume(0);
    }
}