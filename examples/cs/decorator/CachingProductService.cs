public class CachingProductService: ProductServiceDecorator{

    private Dictionary<int,Product> _cache = new();

    public CachingProductService(IProductService inner):base(inner){}

    public override Product GetProductByID(int id)
    {
        if (_cache.TryGetValue(id, out var cached))
        {
            System.Console.WriteLine("[CACHE] hit");
            return cached;
        }
        var product = base.GetProductByID(id);
        _cache[id] = product;
        return product;
    }
}
