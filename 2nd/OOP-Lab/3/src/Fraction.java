public class Fraction {
    public int topN;
    public int btmN;

    public String toFraction() {
        return topN + "/" + btmN;
    }

    public String toFloat() {
        double total, top = topN, btm = btmN;
        total = top/btm;
        return String.valueOf(total);
    }

    public void addFraction(Fraction f) {
        int tn2, bn2, anst, ansb;
        tn2 = f.topN;
        bn2 = f.btmN;
        if (bn2 == btmN) {
            anst = topN + tn2;
            ansb = btmN;
        }
        else {
            anst = (topN*bn2) + (tn2*btmN);
            ansb = btmN*bn2;
        }
        topN = anst;
        btmN = ansb;
    }
}
