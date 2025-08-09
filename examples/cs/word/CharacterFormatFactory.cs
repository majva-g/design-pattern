public class CharacterFormatFactory
{
    private Dictionary<string, CharacterFormat> _formats = new();

    public CharacterFormat GetFormat(string fontFamily, int fontSize, string color)
    {
        string key = $"{fontFamily}-{fontSize}-{color}";

        if (!_formats.ContainsKey(key))
        {
            _formats[key] = new CharacterFormat(fontFamily, fontSize, color);
        }

        return _formats[key];
    }
}