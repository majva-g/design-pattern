public abstract class RemoteControl
{
    protected IDevice _device;

    public RemoteControl(IDevice device)
    {
        _device = device;
    }

    public virtual void TogglePower()
    {
        System.Console.WriteLine("Toggling power ...");
        
        _device.TurnOn();

    }

    public virtual void VolumeDown()
    {
        System.Console.WriteLine("Volume Down");
        _device.SetVolume(5);
    }
}