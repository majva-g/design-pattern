
var factory = new CharacterFormatFactory();

var format1 = factory.GetFormat("Arial", 12, "Black");
var format2 = factory.GetFormat("Arial", 12, "Black");

var chars = new List<DocumentCharacter>
{
    new DocumentCharacter('H',0,format1),
    new DocumentCharacter('e',1,format1),
    new DocumentCharacter('l',2,format2),
    new DocumentCharacter('l',0,format2),
    new DocumentCharacter('o',0,format2),
};

foreach (var c in chars)
{
    c.Render();
}

