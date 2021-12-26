public class Cat {
    private String name;
    private String color;
    public double height;
    public double weight;

    public void setWeight(double w) {
        weight = w;
        if (weight <= 0) {
            System.out.println("Error");
        }
    }

    public void setHeight(double h) {
        height = h;
        if (height <= 0) {
            System.out.println("Error");
        }
    }

}
