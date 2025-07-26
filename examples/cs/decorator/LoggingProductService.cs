public class LoggingProductService : ProductServiceDecorator
{
    public LoggingProductService(IProductService inner):base(inner){}

    public override Product GetProductByID(int id)
    {
        System.Console.WriteLine($"[LOG]) Getting product {id} ...");
        return _inner.GetProductByID(id);
    }
}