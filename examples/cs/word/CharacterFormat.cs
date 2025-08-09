public class CharacterFormat
{
    public string FontFamily { get; }
    public int FontSize { get; }
    public string Color { get; }

    public CharacterFormat(string fontFamily, int fontSize, string color)
    {
        FontFamily = fontFamily;
        FontSize = fontSize;
        Color = color;
    }
}