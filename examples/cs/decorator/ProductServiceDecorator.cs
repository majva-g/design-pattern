public abstract class ProductServiceDecorator : IProductService{

    protected IProductService _inner;

    protected ProductServiceDecorator(IProductService inner)
    {
        _inner = inner;
    } 

    public virtual Product GetProductByID(int id)
    {
       return _inner.GetProductByID(id);
    }    

}

