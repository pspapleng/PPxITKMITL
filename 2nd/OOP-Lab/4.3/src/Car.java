public class Car extends Vehicle {
    private String typeEngine;

    public void setTypeEngine(String t) {
        typeEngine = t;
    }
    public String getTypeEngine() {
        return typeEngine;
    }
    public void setCarInfo(int s, String t, String y) {
        this.setFuel(s); //ใส่ this. ได้มั้ยคะ?
        setTopSpeed(t); //ใส่ this. ได้มั้ยคะ?
        this.typeEngine = y;
    }
    public void showCarInfo() {
        System.out.println("Car engine is " + getTypeEngine() + ". Fuel is " + this.getFuel() + " litre and Top Speed is " + this.getTopSpeed() + " m/s.");
    }
    public void move() {
        if (getFuel() - 50 >= 0) {
            System.out.println("Move.");
            setFuel(getFuel() - 50);
        } else {
            System.out.println("Please add fuel.");
        }
    }
}
