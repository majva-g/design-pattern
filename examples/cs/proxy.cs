interface IAccountingSystem
{
    void displayFinancialReport();
}

class RealAccountingSystem : IAccountingSystem
{
    public void displayFinancialReport()
    {
        System.Console.WriteLine("Displaying sensitive financial report...");
    }
}

class ProxyAccountingSystem : IAccountingSystem{
    private RealAccountingSystem _realSys;
    private string _currentUserRole;

    public ProxyAccountingSystem(string currentUserRole){
        _currentUserRole = currentUserRole;

    }
    public void displayFinancialReport(){
        if (_currentUserRole == "Admin")
        {
            _realSys = new RealAccountingSystem();
            _realSys.displayFinancialReport();
        }
        else
        {
            System.Console.WriteLine("Access Denied ...!");
        }
    }
}

public class Program{
    public static void Main(string[] args)
    {
        IAccountingSystem admin = new ProxyAccountingSystem("Admin");
        IAccountingSystem user = new ProxyAccountingSystem("User");

        admin.displayFinancialReport(); // display financial reports 
        user.displayFinancialReport(); // Access Denied
    }
}