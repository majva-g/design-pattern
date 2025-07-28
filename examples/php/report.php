<?php

interface ReportFormatter{
    public function format(array $data):string;
}

class HTMLFormatter implements ReportFormatter{

    public function format(array $data) : string{
        $html = "<ul>";
        foreach ($data as $key => $value) {
                $html .= "<li>$key: $value</li>";
        }
        $html.="</ul>";

        return $html;
    }

}

class JSonFormatter implements ReportFormatter{

    public function format(array $data) : string{
        return json_encode($data,JSON_PRETTY_PRINT);
    }
}

class PDFFormatter implements ReportFormatter{

    public function format(array $data) : string{
        return "PDF Content : \n" . implode("\n", array_map(
            fn($k,$v)=> "$k: $v",array_keys($data),$data
        ));
    }
}

////////////////////////////////////////////////////////

abstract class Report{

    protected ReportFormatter $formatter;

    function __construct(ReportFormatter $formatter)
    {
        $this->formatter = $formatter;
    }

    abstract public function generate():string;
}

 class SalesReport extends Report 
{

     public function generate():string{
        $data =[
            "total"=>"250,000,000",
            "date" => date('Y-m-d')
        ];
        return $this->formatter->format($data);
    }
}

class UserReport extends Report 
{

     public function generate():string{
        $data =[
            "total_users"=>1526,
            "active_users" => 1317,
            "last_login" =>'2025-07-16'
        ];
        return $this->formatter->format($data);
    }
}
//////////////////////////////////////////////////////////////

$salesPdf = new SalesReport(new PDFFormatter());
echo $salesPdf->generate();

echo "\n\n";

$salesHtml = new SalesReport(new HTMLFormatter());
echo $salesHtml->generate();

echo "\n\n";

$userJson =new UserReport(new JSonFormatter());
echo $userJson->generate();