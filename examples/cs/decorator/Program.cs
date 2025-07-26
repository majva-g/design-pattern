
IProductService service = new ProductService();

service.GetProductByID(12);
////////////////////////////////////////////////
service = new LoggingProductService(service);
service = new CachingProductService(service);
///////////////////////////////////////////////
/// 
var p1 = service.GetProductByID(11); // From DB + Log
var p2 = service.GetProductByID(11); // From Cache + Log 