public class ProductService :IProductService{
    public Product GetProductByID(int id)
    {
        System.Console.WriteLine("Fetching data from DB...");

        return new Product { Id = id , Name = "Product " + id};
    }
}