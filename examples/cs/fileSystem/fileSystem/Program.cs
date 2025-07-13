var file1 = new File("photo.jpg", 1500);
var file2 = new File("video.mp4", 5000000);
var file3 = new File("docs.txt", 300);

var docs = new Directory("Documents");

docs.add(file3);

var media = new Directory("Media");

media.add(file1);
media.add(file2);

var root = new Directory("Root");
root.add(docs);
root.add(media);

root.Display();

System.Console.WriteLine($"\nTotal Size : {root.GetSize()} bytes");