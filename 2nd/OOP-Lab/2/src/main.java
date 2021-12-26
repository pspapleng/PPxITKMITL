import java.util.Scanner;

public class main {

    public static void main(String[] args) {
        Student s1 = new Student();
        Scanner score = new Scanner(System.in);
        System.out.print("input Midterm Score: ");
        s1.MidtermScore = score.nextDouble();
        System.out.print("input Final Score: ");
        s1.FinalScore = score.nextDouble();
        s1.showGrade();
    }
}
