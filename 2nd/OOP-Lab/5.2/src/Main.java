public class Main {
    public static void main(String[] args) {
//        CheckingAccount a1 = new CheckingAccount(50000,"61070033",5000);
//        a1.showAccount();
//        a1.deposit(500);
//        System.out.println(a1);
//        a1.withdraw(40000.0);
//        System.out.println(a1.toString());

//        CheckingAccount a1 = new CheckingAccount();
//        a1.showAccount();
//        a1.deposit(500);
//        System.out.println(a1);
//        a1.withdraw(40000.0);
//        System.out.println(a1.toString());

//        Account a1 = new CheckingAccount();
//        a1.setCredit(1000);
//        System.out.println(a1);

//        Account a1 = new CheckingAccount();
//        System.out.println(a1);
//        ((CheckingAccount)a1).setCredit(1000);
//        System.out.println(a1);

//        CheckingAccount a1 = new CheckingAccount(1000,"62070033",500);
//        Customer c1 = new Customer();
//        Customer c2 = new Customer("Harry","Potter");
//        Customer c3 = new Customer("Harry","Potter",a1);
//        System.out.println(c1);
//        System.out.println(c2);
//        System.out.println(c3);

        CheckingAccount a1 = new CheckingAccount(1000,"62070033",500);
        Customer c1 = new Customer();
        Customer c2 = new Customer("Harry","Potter");
        Customer c3 = new Customer("Harry","Potter",a1);
        System.out.println(c1.equals(c2));
        System.out.println(c3.equals(c2));

    }
}
