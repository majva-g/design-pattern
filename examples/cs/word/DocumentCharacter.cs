public class DocumentCharacter
{
    public char Symbol { get; }
    public int Position { get; }

    public CharacterFormat Format { get; }

    public DocumentCharacter(char symbol, int position, CharacterFormat format)
    {
        Symbol = symbol;
        Position = position;
        Format = format;
    }

    public void Render()
    {
        System.Console.WriteLine($"'{Symbol}' at {Position} with [{Format.FontFamily}, {Format.FontSize}, {Format.Color}]");
    }
}