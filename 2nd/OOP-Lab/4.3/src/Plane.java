public class Plane extends Vehicle {
    public void setPlaneInfo(int s, String t) {
        setFuel(s);
        setTopSpeed(t);
    }
    public void showPlaneInfo() {
        System.out.println("Plane detail is, Fuel is " + this.getFuel() + " litre and Top Speed is " + this.getTopSpeed() + " m/s.");
    }
    public void fly() {
        if (this.getFuel() - 200 >= 0) {
            System.out.println("Fly.");
            setFuel(this.getFuel() - 200);
        } else {
            System.out.println("Please add fuel.");
        }
    }
}
