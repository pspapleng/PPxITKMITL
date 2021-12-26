public class Pigeon extends Bird {
    private static int numberOfPigeon;

    public Pigeon() {
        this(0,0,0)
    }

    public Pigeon(double wingSize, double weight, double height) {
        super(wingSize, weight, height);
        numberOfPigeon += 1;
    }

    public void eat(String food) {
        if (food.equals("worm")) {
            getWeight() += 0.5;
        }
    }
}
