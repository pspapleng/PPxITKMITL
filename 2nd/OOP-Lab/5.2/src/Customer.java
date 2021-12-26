public class Customer {
    private String firstName;
    private String lastName;
    private CheckingAccount acct;

    public Customer() {
        this("","",null);
    }
    public Customer(String firstName, String lastName) {
//        this.firstName = firstName;
//        this.lastName = lastName;
        this(firstName, lastName, null);
    }
    public Customer(String firstName, String lastName, CheckingAccount acct) {
//        this(firstName, lastName, acct);
        this.firstName = firstName;
        this.lastName = lastName;
        this.acct = acct;
    }
    public void setFirstName(String firstName) {
        this.firstName = firstName;
    }
    public String getFirstName() {
        return firstName;
    }
    public void setLastName(String lastName) {
        this.lastName = firstName;
    }
    public String getLastName() {
        return lastName;
    }
    public void setAcct(CheckingAccount acct) {
        this.acct = acct;
    }
    public CheckingAccount getAcct() {
        return acct;
    }

    @Override
    public String toString() {
        if (getAcct() == null) {
            return getFirstName() + " " + getLastName() + " doesn’t have account";
        } else {
            return "The " + getFirstName() + " account has " + acct.getBalance() + " get baht and " + acct.getCredit() + " credits.";
        }
    }

    public boolean equals(Customer c) {
        if ( (firstName.equals(c.getFirstName())) & (lastName.equals(c.getLastName())) ) {
            return true;
        } else {
            return false;
        }
    }
}
